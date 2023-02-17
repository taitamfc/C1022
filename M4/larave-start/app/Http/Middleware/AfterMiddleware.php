<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AfterMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        // dd($response->content);

        // Lay noi dung cua view
        $content = $response->getContent();
        // Thay the tu 'danh sach' bang 'danh sach 123'
        $content = str_replace('danh sach','danh sach 123',$content);
        // THiet lap lai gia tri thuoc tinh content
        $response->setContent($content);

        return $response;
    }
}
