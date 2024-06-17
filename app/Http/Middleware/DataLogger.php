<?php

namespace App\Http\Middleware;

use App\Models\Log;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DataLogger
{
    private $start_time;
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $this->start_time = microtime(true);
        return $next($request);
    }

    public function terminate(Request $request, Response $response): void
    {
        if (env('API_DATALOGGER', true)) {
            if (env('API_DATALOGGER_USE_DB', true)) {
                $endTime = microtime(true);
                $log = new Log();
                $log->time = gmdate('Y-m-d H:i:s');
                $log->duration = number_format($endTime - LARAVEL_START, 3);
                $log->ip = $request->ip();
                $log->url = $request->fullUrl();
                $log->method = $request->method();
                $log->input = $request->getContent();
                $log->save();
            } else {
                $endTime = microtime(true);
                $filename =
                $log = [
                    'time' => gmdate('Y-m-d H:i:s'),
                    'duration' => $duration,
                    'ip' => $request->ip(),
                    'url' => $request->fullUrl(),
                    'method' => $request->method(),
                    'input' => $request->getContent(),
                ];
                $log = json_encode($log);
                $log = $log . PHP_EOL;
                $log_file = fopen(storage_path('logs/api.log'), 'a');
                fwrite($log_file, $log);
                fclose($log_file);
            }
        }
    }
}
