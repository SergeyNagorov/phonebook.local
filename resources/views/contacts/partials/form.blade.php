<label for="name">Name</label>
<input type="text" name="name"  id="name" value="{{ $contact->name ?? old('name') }}">

<label for="phone">Phone</label>
<input type="text" name="phone"  id="phone" value="{{ $contact->phone ?? old('phone') }}">

<button type="submit">Save</button>

<a href="{{ route('contacts.index') }}">
    <input type="button" value="Cancel">
</a>
