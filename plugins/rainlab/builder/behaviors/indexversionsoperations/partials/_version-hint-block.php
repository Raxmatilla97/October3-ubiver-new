<div class="modal-header">
    <h4 class="modal-title"><?= e($title) ?></h4>
    <button type="button" class="btn-close" data-dismiss="popup"></button>
</div>
<form autocomplete="off">
    <div class="modal-body">
        <p><?= e($text) ?></p>

        <div class="form-group checkbox-field span-full">

            <div class="checkbox custom-checkbox" tabindex="0">
                <input type="hidden" name="dont_show_again" value="0">
                <input type="checkbox" id="version-hint-dont-show-again-cb" name="dont_show_again" value="1">

                <label for="version-hint-dont-show-again-cb" class="storm-icon-pseudo"><?= e(trans('rainlab.builder::lang.version.dont_show_again')) ?></label>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <?php if (!isset($okOnlyButton)): ?>
            <button type="submit" class="btn btn-primary"><?= e(trans('backend::lang.form.ok')) ?></button>
            <a class="btn btn-default cancel" data-dismiss="popup" href="javascript:;"><?= e(trans('backend::lang.form.cancel')) ?></a>
        <?php else: ?>
            <a class="btn btn-primary cancel" data-dismiss="popup" href="javascript:;"><?= e(trans('backend::lang.form.ok')) ?></a>
        <?php endif ?>
    </div>
    <input type="hidden" name="hint_code" value="<?= e($code) ?>">
</form>