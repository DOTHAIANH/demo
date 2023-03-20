<?php

namespace App\Http\Middleware;

use Closure;

class CheckLoginMember
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ( \Auth::guard('member')->guest() ) {
            return redirect()->route('home.login')->with([
                    'toastr' => 'Bạn cần đăng nhập'
                ]
            );
        }else{
            if(auth('member')->user()->status != \App\Models\Member::STATUS_ACTIVE){
                auth('member')->logout();
                return redirect('/')->with([
                        'toastr' => 'Tài khoản của bạn bị vô hiệu hóa.',
                    ]
                );
            }
        }
        return $next($request);
    }
}
