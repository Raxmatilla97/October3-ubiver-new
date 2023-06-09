<?= Form::open([
    'data-builder-command'=>'model:cmdApplyModelSettings'
]) ?>
    <div class="modal-header">
        <h4 class="modal-title"><?= e(trans('rainlab.builder::lang.model.entity_name')) ?></h4>
        <button type="button" class="btn-close" data-dismiss="popup"></button>
    </div>
    <div class="modal-body">
        <?php if (!isset($errorMessage)): ?>
            <?= $form->render() ?>
        <?php else: ?>
            <p><?= e($errorMessage) ?></p>
        <?php endif ?>
    </div>
    <div class="modal-footer">
        <?php if (!isset($errorMessage)): ?>
            <button
                type="submit"
                class="btn btn-primary">
                <?= e(trans('backend::lang.form.ok')) ?>
            </button>
        <?php endif ?>
        <button
            type="button"
            class="btn btn-default"
            data-dismiss="popup">
            <?= e(trans('backend::lang.form.cancel')) ?>
        </button>

        <input type="hidden" name="plugin_code" value="<?= e($pluginCode) ?>">
    </div>
<?= Form::close() ?>