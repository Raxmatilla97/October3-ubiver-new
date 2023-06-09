<?= Form::open([
    'data-builder-command'=>'localization:cmdCopyMissingStrings'
]) ?>
    <div class="modal-header">
        <h4 class="modal-title"><?= e(trans('rainlab.builder::lang.localization.add_missing_strings')) ?></h4>
        <button type="button" class="btn-close" data-dismiss="popup"></button>
    </div>

    <div class="modal-body">
        <?php if ($languages): ?>
            <div class="form-group dropdown-field span-full" id="languge-dropdown">
                <label class="form-label" for="languge-dropdown">
                    <?= e(trans('rainlab.builder::lang.localization.add_missing_strings_label')) ?>
                </label>

                <select class="form-control custom-select" name="language">
                    <?php foreach ($languages as $language): ?>
                        <option value="<?= e($language) ?>"><?= e($language) ?></option>
                    <?php endforeach ?>
                </select>
            </div>
        <?php else: ?>
            <p><?= e(trans('rainlab.builder::lang.localization.no_languages_to_copy_from')) ?></p>
        <?php endif ?>
    </div>
    <div class="modal-footer">
        <?php if ($languages): ?>
            <button
                type="submit"
                class="btn btn-primary">
                <?= e(trans('rainlab.builder::lang.localization.copy')) ?>
            </button>
        <?php endif ?>
        <button
            type="button"
            class="btn btn-default"
            data-dismiss="popup">
            <?= e(trans('backend::lang.form.cancel')) ?>
        </button>
    </div>
<?= Form::close() ?>
