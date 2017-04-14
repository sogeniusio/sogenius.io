<?php

namespace App\Http\Middleware;
use App\Testimony;
use Session;
use Closure;

class CheckReviewLink
{
    // /**
    //  * Custom parameters.
    //  *
    //  * @var \Symfony\Component\HttpFoundation\ParameterBag
    //  *
    //  * @api
    //  */
    //  public $attributes;

    /**
     * Check Review Link - granting clients access to submit review
     * =================
     * Check that user's link matches the 40 character string generated
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
     public function handle($request, Closure $next)
     {
        $url = $_SERVER['REQUEST_URI'];
        parse_url($url, PHP_URL_QUERY);
        $parts = parse_url($url);
        $auth_token = parse_str($parts['query'], $query);
        $request->attributes->set('testimony', Testimony::where('auth_token', '=', $query['auth_token'])->firstOrFail());

        return $next($request);

     }

}
