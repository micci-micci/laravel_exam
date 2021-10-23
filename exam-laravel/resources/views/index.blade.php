<x-layout>
    <x-slot name="title">
        Top page
    </x-slot>

    <form action="{{ route('exams.thanks') }}" method="post">
        @csrf

        <div class="form-group">
            <label>
                氏名<br>
                <input type="text" name="username" value="{{ old('username') }}">
                <br>
            </label>
            @error('username')
                <div class="error">{{ $message }}</div>
            @enderror
            <label>
                メールアドレス<br>
                <input type="text" name="mail" value="{{ old('mail') }}">
            </label>
            @error('mail')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-btn">
            <button class="btn">送信</button>
        </div>
    </form>
</x-layout>
