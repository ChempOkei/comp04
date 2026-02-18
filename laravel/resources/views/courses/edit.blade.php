@extends('layouts.edit')
@section('content')
  <div class="top">
    <div>
      <div class="muted" style="font-size:12px;">Редактирование курса</div>
      <h1>Курс: {{ $course->course_name }}</h1>
    </div>
    <div class="actions">
      <a class="btn" href="{{ route('courses.index') }}">Назад</a>
      <a class="btn" href="{{ route('logout') }}">Выйти</a>
    </div>
  </div>
  <div class="card">
    <div class="cardbody">
      <form class="form" action="{{ route('courses.update', ['course' => $course]) }}" method="post"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <x-flash-message />
        <div style="display:flex;gap:12px;align-items:center;flex-wrap:wrap">
          <img class="thumb" src="{{ Storage::url($course->image_url) }}" alt="">
          <div class="muted" style="font-size:12px;">
            Текущая обложка хранится как миниатюра 300×300 (пропорционально). Имя файла начинается с mpic
          </div>
        </div>
        <div class="grid">
          <div class="" id="nameField">
            <x-form-input label="Название курса" name="course_name" :useOld=false value="{{ $course->course_name }}" />
            <div class="help">Обязательно, максимум 30 символов</div>
          </div>
          <div class="invalid" id="hoursField">
            <x-form-input label="Продолжительность (часы)" name="duration" :useOld=false value="{{ $course->duration }}"
              type="number" />
            <div class="help">Обязательно, целое число не больше 10</div>
          </div>
        </div>
        <div class="grid">
          <div class="" id="priceField">
            <x-form-input label="Цена" name="price" :useOld=false value="{{ $course->price }}" type="number" />
            <div class="help">Обязательно, формат xx.xx, не менее 100</div>
          </div>
          <div class="" id="imgField">
            <x-form-input label="Новая обложка (JPG)" name="image_url" :useOld=false value="{{ $course->image_url }}"
              type="file" />
            <div class="help">При редактировании можно не загружать. JPG/JPEG, максимум 2000 Кб</div>
          </div>
        </div>
        <div class="grid">
          <div class="" id="startDateField">
            <x-form-input label="Дата начала" name="start_date" :useOld=false value="{{ $course->start_date }}"
              type="date" />
            <div class="help">Обязательно, формат дд-мм-гггг</div>
          </div>
          <div class="" id="endDateField">
            <x-form-input label="Дата окончания" name="end_date" :useOld=false value="{{ $course->end_date }}"
              type="date" />
            <div class="help">Обязательно, формат дд-мм-гггг</div>
          </div>
        </div>
        <div class="" id="descriptionField">
          <x-form-input label="Описание" name="description" :useOld=false value="{{ $course->description }}"
            type="text" />

          <div class="help">Необязательно, максимум 100 символов</div>
        </div>
        <div class="actions">
          <button class="btn primary" type="submit">Сохранить</button>
          <a class="btn" href="{{ route('courses.index') }}">Отмена</a>
          <a class="btn danger" type="submit">Удалить</a>
          
        </div>
      </form>
    </div>
  </div>
@endsection