<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <h1>Edit Track</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
    <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
    </ul>
    </div>
    @endif
        <form action="{{ route('tracks.update', $track->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
        <label for="name">Track Name</label>
        <input type="text" name="name" class="form-control" value="{{ old('name', $track->name) }}" required>
        </div>
        <div class="form-group">
        <label for="hours">Hours</label>
        <textarea name="hours" class="form-control">{{ old('hours', $course->hours) }}</textarea>
        </div>
        <div class="form-group">
        <label for="startDate">Start Date </label>
        <input type="date" step="0.01" name="startDate" class="form-control" value="{{ old('startDate', $track->startDate) }}" required>
        </div>
        <x-btn-component type="primary">
            Update Track
          </x-btn-component>
          <x-a-component type="success" locate="{{ route('tracks.index') }}">
    Back to List
    </x-a-component>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
