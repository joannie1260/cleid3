<!-- edit_user.blade.php -->
<form action="{{ route('admin.users.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="name">Name:</label>
    <input type="text" name="name" value="{{ $user->name }}">
    <!-- Add other fields here -->
    <button type="submit">Update</button>
</form>