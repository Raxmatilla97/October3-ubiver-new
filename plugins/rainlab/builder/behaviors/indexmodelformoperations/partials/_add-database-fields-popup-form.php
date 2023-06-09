<?= Form::open([
    'data-builder-command'=>'modelForm:cmdAddDatabaseFields'
]) ?>

    <div class="modal-header">
        <h4 class="modal-title"><?= e(trans('rainlab.builder::lang.form.btn_add_database_fields')) ?></h4>
        <button type="button" class="btn-close" data-dismiss="popup"></button>
    </div>

    <div class="modal-body">
        <?= $datatable->render(); ?>
    </div>
    <div class="modal-footer">
        <button
            type="submit"
            class="btn btn-primary">
            <?= e(trans('backend::lang.form.apply')) ?>
        </button>
        <button
            type="button"
            class="btn btn-default"
            data-dismiss="popup">
            <?= e(trans('backend::lang.form.cancel')) ?>
        </button>

        <input type="hidden" name="plugin_code" value="<?= e($pluginCode) ?>">
    </div>
<?= Form::close() ?>