<?= Form::open([
    'class' => 'layout hide-secondary-tabs',
    'data-change-monitor' => 'true',
    'data-window-close-confirm' => e(trans('backend::lang.form.confirm_tab_close')),
    'data-entity' => 'versions',
    'onsubmit' => 'return false'
]) ?>
    <?= $form->render() ?>
    <input type="hidden" name="plugin_code" value="<?= e($pluginCode) ?>">
    <input type="hidden" name="original_version" value="<?= e($originalVersion) ?>">

    <input type="hidden" data-hint-hidden="builder-version-save-unapplied" value="<?= $this->isBackendHintHidden('builder-version-save-unapplied') ? 'true' : 'false' ?>">
    <input type="hidden" data-hint-hidden="builder-version-apply" value="<?= $this->isBackendHintHidden('builder-version-apply') ? 'true' : 'false' ?>">
    <input type="hidden" data-hint-hidden="builder-version-rollback" value="<?= $this->isBackendHintHidden('builder-version-rollback') ? 'true' : 'false' ?>">

    <script type="text/template" data-version-hint-template="builder-version-save-unapplied">
        <?= $this->makePartial('$/rainlab/builder/behaviors/indexversionsoperations/partials/_version-hint-block.php', [
            'title'=>trans('rainlab.builder::lang.version.save_unapplied_version'),
            'text'=>trans('rainlab.builder::lang.version.hint_save_unapplied'),
            'okOnlyButton' => true,
            'code' => 'builder-version-save-unapplied'
        ]) ?>
    </script>

    <script type="text/template" data-version-hint-template="builder-version-rollback">
        <?= $this->makePartial('$/rainlab/builder/behaviors/indexversionsoperations/partials/_version-hint-block.php', [
            'title'=>trans('rainlab.builder::lang.version.rollback_version'),
            'text'=>trans('rainlab.builder::lang.version.hint_rollback'),
            'code' => 'builder-version-rollback'
        ]) ?>
    </script>

    <script type="text/template" data-version-hint-template="builder-version-apply">
        <?= $this->makePartial('$/rainlab/builder/behaviors/indexversionsoperations/partials/_version-hint-block.php', [
            'title'=>trans('rainlab.builder::lang.version.apply_version'),
            'text'=>trans('rainlab.builder::lang.version.hint_apply'),
            'code' => 'builder-version-apply'
        ]) ?>
    </script>
<?= Form::close() ?>
