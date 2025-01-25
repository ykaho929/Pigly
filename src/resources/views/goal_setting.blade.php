@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/goal_setting.css') }}">
@endsection

@section('content')

<main>
    <div class="setting__content">
        <form class="update-form" action="/weight_logs/{:weightLogId}/update" method="POST">
        @csrf
            <div class="setting-form__heading">目標体重設定</div>
            <div class="setting-form__item">
                <input class="setting-form__item-input" type="decimal" name="target_weight">kg
            </div>

            <div class="setting-form__item">
                <input class="setting-form__back-btn" type="submit" value="戻る" name="back">
                <input class="setting-form__update-btn btn" type="submit" value="更新" name="send">
            </div>
        </form>
    </div>
</main>

@endsection