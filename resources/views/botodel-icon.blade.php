@extends('layouts.app')

@section('title', 'Botodel Icon')

@section('content')
    <section class="activation-page" style="max-width: 520px; margin: 0 auto;">
        <div class="activation-topbar" style="margin-top: 18px;">BOTODEL</div>

        <div class="activation-card" style="padding: 20px; text-align: center;">
            <div style="font-size: 14px; color: #6a6a6a; letter-spacing: 0.16em; text-transform: uppercase;">
                Icon Number
            </div>
            <div style="font-size: 38px; font-weight: 700; margin: 8px 0 14px; color: #1f1f1f;">
                #{{ $iconNumber }}
            </div>

            <div style="display: flex; justify-content: center; align-items: center; padding: 18px 0;">
                {!! $iconSvg !!}
            </div>
        </div>
    </section>
@endsection
