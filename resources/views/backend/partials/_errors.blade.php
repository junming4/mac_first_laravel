@if (count($errors) > 0)
    <?php
    $allErrors = '';
    foreach ($errors->all() as $error) {
        $allErrors .= $error;
    }
    ?>
    <input type="hidden" value="{{ $allErrors }}"  class="errormsg">
    <?php $e = $errors->all(); $e = []?>
@endif

