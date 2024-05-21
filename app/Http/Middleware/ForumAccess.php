<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Forum\Topic;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ForumAccess
{
    /**
     * @param Request $request
     * @param Closure $next
     * @return Response
     * @throws \Exception
     */
    public function handle(Request $request, Closure $next): Response
    {
        $grade = null;

        if ($request['section']) {
            $grade = $request['section']->view_grade_id;
        } elseif ($request['topic']) {
            $topic = Topic::findOrFail($request['topic']->id);
            $grade = $topic->section->view_grade_id;
        }

        if ($grade !== null) {
            return app(Authorization::class)->handle($request, $next, $grade);
        }

        return $next($request);
    }
}
