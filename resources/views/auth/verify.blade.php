@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('メールアドレスを確認してください') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('新しい認証メールがあなたのメールアドレスに送信されました。') }}
                        </div>
                    @endif

                    {{ __('あなたのメールアドレスに認証メールを送信しました。') }}
                        <br>
                    {{ __('認証メールを受け取れない場合') }}, <a href="{{ route('verification.resend') }}">{{ __('こちらのリンクをクリック') }}</a>.
                    <br>
                        {{ __('または迷惑メールフォルダなどをご確認ください。') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
