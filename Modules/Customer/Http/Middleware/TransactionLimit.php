<?php

namespace Modules\Customer\Http\Middleware;

use Closure;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Modules\Customer\Entities\Transaction;

class TransactionLimit
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        $user_id = Auth::id();

        $startDate = Carbon::now()->startOfDay();
        $endDate = Carbon::now()->endOfDay();

        $transactionCount = Transaction::where(['user_id' => $user_id, 'type' => 'withdraw'])
            ->whereBetween('created_at', [$startDate, $endDate])
            ->count();

        if ($transactionCount >= 10) {
            throw new HttpResponseException(response()->json([
                'success' => false,
                'errors' => [
                    'transactionLimitation' => ['Transaction limit exceeded for today']
                ]
            ], 403));
        }

        return $next($request);
    }
}
