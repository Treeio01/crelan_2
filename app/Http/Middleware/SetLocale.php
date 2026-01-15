<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Supported locales
     */
    private const SUPPORTED_LOCALES = ['nl', 'fr'];
    
    /**
     * Default locale
     */
    private const DEFAULT_LOCALE = 'nl';

    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $locale = $this->determineLocale($request);
        
        App::setLocale($locale);
        
        // Store in session for persistence
        session(['locale' => $locale]);
        
        return $next($request);
    }

    /**
     * Determine which locale to use
     */
    private function determineLocale(Request $request): string
    {
        // 1. Check URL parameter (for switching)
        if ($request->has('lang') && $this->isSupported($request->get('lang'))) {
            return $request->get('lang');
        }
        
        // 2. Check session
        if (session()->has('locale') && $this->isSupported(session('locale'))) {
            return session('locale');
        }
        
        // 3. Check browser preference
        $browserLocale = $request->getPreferredLanguage(self::SUPPORTED_LOCALES);
        if ($browserLocale && $this->isSupported($browserLocale)) {
            return $browserLocale;
        }
        
        // 4. Default
        return self::DEFAULT_LOCALE;
    }

    /**
     * Check if locale is supported
     */
    private function isSupported(?string $locale): bool
    {
        return $locale && in_array($locale, self::SUPPORTED_LOCALES, true);
    }
}
