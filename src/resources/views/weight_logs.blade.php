@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/weight_logs.css') }}">
@endsection

@section('content')

<main>
    <div class="weight_logs__content">
           @isset($weight_logs)
           @foreach($weightLogs as $weightLog)
        <table class="weight__nav">
            
            <th class="weight_logs__content-nav">
                <div class="nav__target-tag">目標体重</div>
                <div class="nav__target-weight">{{ $weightLog->weightTarget->target_weight }}kg</div>
            </th>
            <th class="weight_logs__content-nav">
                <div class="nav__gap-tag">目標まで</div>
                <div class="nav__gap-wight">kg</div>
            </th>
            <th class="weight_logs__content-nav">
                <div class="nav__latest-tag">最新体重</div>
                <div class="nav__latest-weight">{{$weightLogs->weight}}kg</div>
            </th>
        </table>
       
        <div class="weight_logs__inner">
            <form class="search-form" action="/search" method="get">
            @csrf
            <input class="search-form__date" type="date" name="date" value="{{request('date')}}">　～　
            <input class="search-form__date" type="date" name="date" value="{{request('date')}}">
            <div class="search-form__actions">
                <input class="search-form__search-btn btn" type="submit" value="検索">
            </div>
            </form>
        </div>

        <div class="weight_logs__inner">
            <div class="modal" id="">
                <a href="#!" class="modal-overlay">データ追加</a>
                <div class="modal__inner">
                    <div class="modal__content">
                        <form class="modal__create-form" action="/create" method="post">
                        @csrf
                            <div class="modal-form__group">
                                <title class="modal-form__ttl">Weight Logを追加</title>
                            </div>
                            <div class="modal-form__group">
                                <label class="modal-form__label" for="">日付</label>
                                <p>{{$weightLogs->date}}</p>
                            </div>
                            <div class="modal-form__group">
                                <label class="modal-form__label" for="">体重</label>
                                <p>{{$weightLogs->weight}}</p>
                            </div>
                            <div class="modal-form__group">
                                <label class="modal-form__label" for="">摂取カロリー</label>
                                <p>{{$weightLogs->calories}}</p>
                            </div>
                            <div class="modal-form__group">
                                <label class="modal-form__label" for="">運動時間</label>
                                <p>{{$weightLogs->exercise_time}}</p>
                            </div>
                            <div class="modal-form__group">
                                <label class="modal-form__label" for="">運動内容</label>
                                <p>{{$weightLogs->exercise_content}}</p>
                            </div>
                            <input class="modal-form__delete-btn btn" type="submit" value="登録">
                        </form>
                    </div>
                    <a href="#" class="modal__close-btn">戻る</a>
                </div>
            </div>
        </div>

        <table class="weight_logs__table">
            <tr class="weight_logs__row">
                <th class="weight_logs__label">日付</th>
                <th class="weight_logs__label">体重</th>
                <th class="weight_logs__label">食事摂取カロリー</th>
                <th class="weight_logs__label">運動時間</th>
                <th class="weight_logs__label"></th>
            </tr>
            
            <tr class="weight_logs__row">
                <td class="weight_logs__data">{{$weightLogs->date}}</td>
                <td class="weight_logs__data">{{$weightLogs->weight}}</td>
                <td class="weight_logs__data">{{$weightLogs->exercise_time}}</td>
                <td class="weight_logs__data">{{$weightLogs->exercise_content}}</td>
                <td class="weight_logs__data">
                    <a class="weight_logs__detail-btn" href="weight_logs/{:weightLogId}">詳細</a>
                </td>
            </tr>            
        </table>
        @endforeach
        @endisset
    </div>
</main>

@endsection