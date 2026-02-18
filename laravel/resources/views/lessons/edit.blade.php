@extends('layouts.editlesson')
@section('content')
  <div class="top">
    <div>
      <div class="muted" style="font-size:12px;">Курс: Python старт</div>
      <h1>Урок: Введение</h1>
    </div>
    <div class="actions">
      <a class="btn" href="{{ route('courses.show', ['course'=>$course]) }}">Назад</a>
      <a class="btn" href="{{ route('logout') }}">Выйти</a>
    </div>
  </div>
  <div class="card">
    <div class="cardbody">
      <form class="form" action="{{ route('lessons.update', ['course' => $course, 'lesson' => $lesson]) }}" method="post">
        @csrf
        @method('PATCH')
        <x-flash-message />
        <x-form-input label="Заголовок" name="title" :useOld=false value="{{ $lesson->title }}" type="text" />
        <div class="help">Обязательно, максимум 50 символов</div>
        <div class="grid">
          <div class="" id="hoursField">
            <x-form-input label="Длительность (часы)" name="duration" :useOld=false value="{{ $lesson->duration }}"
              type="number" />
            <div class="help">Обязательно, целое число, не более 4 часов</div>
          </div>
          <div class="" id="videoField">
            <x-form-input label="Видеоссылка SuperTube" name="supertube_url" :useOld=false
              value="{{ $lesson->supertube_url }}" type="url" />
            <div class="help">Необязательно, валидная ссылка</div>
          </div>
        </div>
        <div class="" id="contentField">
          <x-form-input label="Текстовое содержание" name="content" :useOld=false
            value="{{ $lesson->content }}" type="text" />
          <div class="help">Обязательно</div>
        </div>
        <div class="actions">
          <button class="btn primary" type="submit">Сохранить</button>
          <a class="btn" href="lessons-list.html">Отмена</a>
          <a class="btn danger" href="#" data-confirm="Удалить урок?">Удалить</a>
        </div>
      </form>
    </div>
  </div>
@endsection