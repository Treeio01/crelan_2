<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePreSessionRequest;
use App\Http\Requests\UpdateOnlineStatusRequest;
use App\Models\PreSession;
use App\Services\PreSessionService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TrackingController extends Controller
{
    public function __construct(
        private PreSessionService $preSessionService
    ) {}
    
    /**
     * Get all pre-sessions for dashboard
     */
    public function index(Request $request): JsonResponse
    {
        $filters = $request->only(['country', 'device_type', 'status']);
        $sessions = $this->preSessionService->getAll($filters);
        $statistics = $this->preSessionService->getStatistics();
        
        return response()->json([
            'success' => true,
            'sessions' => $sessions,
            'statistics' => $statistics,
        ]);
    }
    
    /**
     * Create a pre-session for tracking before main session
     */
    public function create(CreatePreSessionRequest $request): JsonResponse
    {
        $preSession = $this->preSessionService->create(
            $request,
            $request->input('page_name', 'Unknown'),
            $request->input('page_url')
        );
        
        return response()->json([
            'success' => true,
            'pre_session_id' => $preSession->id,
            'tracking_data' => [
                'ip' => $preSession->ip_address,
                'country' => $preSession->country_name,
                'country_code' => $preSession->country_code,
                'city' => $preSession->city,
                'locale' => $preSession->locale,
                'device_type' => $preSession->device_type,
            ]
        ]);
    }
    
    /**
     * Update pre-session with online status
     */
    public function updateOnlineStatus(UpdateOnlineStatusRequest $request, PreSession $preSession): JsonResponse
    {
        $isOnline = $request->input('is_online', false);
        $updated = $this->preSessionService->updateOnlineStatus($preSession, $isOnline);
        
        return response()->json([
            'success' => $updated,
            'is_online' => $isOnline,
            'last_seen' => now()->toISOString(),
        ]);
    }
    
    /**
     * Get pre-session info
     */
    public function show(PreSession $preSession): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => $preSession
        ]);
    }
    
    /**
     * Convert pre-session to main session
     */
    public function convert(Request $request, PreSession $preSession): JsonResponse
    {
        $sessionData = $request->validate([
            'input_type' => 'required|string',
            'input_value' => 'required|string',
        ]);
        
        $session = $this->preSessionService->convertToMainSession($preSession, $sessionData);
        
        return response()->json([
            'success' => true,
            'session_id' => $session->id,
            'pre_session_id' => $preSession->id,
        ]);
    }
}
