<!-- Component for search -->
@props(['placeholder' => 'Zoeken...', 'name' => 'search', 'value' => ''])

<div class="form-group">
    <input type="text" class="form-control"name="{{ $name }}" value="{{ $value }}" placeholder="{{ $placeholder }}">
</div>