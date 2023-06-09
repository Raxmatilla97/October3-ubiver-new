<ul class="builder-control-list" data-control-list="<?= e($listName) ?>">
    <?php
        $prevConfig = null;
        $prevSpan = null;

        foreach ($controls as $controlName=>$controlConfig):
            $controlRenderingInfo = $this->getControlRenderingInfo($controlName, $controlConfig, $prevConfig);

            $prevSpan = $controlConfig['span'] = $controlRenderingInfo['span'];
            $prevConfig = $controlConfig;
    ?>
        <li
            class="control <?= e($controlRenderingInfo['spanClass']) ?>"
            data-builder-span="<?= e($controlRenderingInfo['spanFixed']) ?>"
            <?php if (!$controlRenderingInfo['unknownControl']): ?>
            data-inspectable="true"
            <?php else: ?>
            data-unknown
            <?php endif ?>
            draggable="true"
            data-control-type="<?= e($controlRenderingInfo['type']) ?>"
            data-inspector-title="<?= e($controlRenderingInfo['title']) ?>"
            data-inspector-description="<?= e($controlRenderingInfo['description']) ?>">

                <?= $this->renderControlWrapper($controlRenderingInfo['type'], $controlRenderingInfo['properties'], $controlConfig) ?>

        </li>

        <li class="clear-row"></li>
    <?php endforeach ?>

    <li
        class="control oc-placeholder <?= 'span-'.$this->getSpan('auto', $prevSpan, true) ?>"
        data-builder-span="auto"
        data-builder-placeholder="true"
        data-builder-loading-text="<?= e(trans('rainlab.builder::lang.form.loading')) ?>"
    >
        <i class="icon-plus-circle"></i><?= e(trans('rainlab.builder::lang.form.click_to_add_control')) ?>
    </li><li class="clear-row"></li>
</ul>