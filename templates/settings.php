<?php
    require_once('../../common.php');
?>
<div class="codegit_settings">
    <label><span class="icon-flow-branch big-icon"></span>CodeGit Settings</label>
    <hr>
    <table class="settings">
        <tr>
            <td style="width: 80%;">
                Disable repo-wide status
            </td>
            <td>
                <select class="setting" data-setting="codiad.plugin.codegit.disableRepoStatus">
                    <option value="true"><?php i18n("Yes"); ?></option>
                    <option value="false" selected><?php i18n("No"); ?></option>
                </select>
            </td>
        </tr>
        <tr>
            <td style="width: 80%;">
                Disable repo-wide status header
            </td>
            <td>
                <select class="setting" data-setting="codiad.plugin.codegit.disableHeader">
                    <option value="true"><?php i18n("Yes"); ?></option>
                    <option value="false" selected><?php i18n("No"); ?></option>
                </select>
            </td>
        </tr>
        <tr>
            <td style="width: 80%;">
                Suppress diff on commit
            </td>
            <td>
                <select class="setting" data-setting="codiad.plugin.codegit.suppressCommitDiff">
                    <option value="true"><?php i18n("Yes"); ?></option>
                    <option value="false" selected><?php i18n("No"); ?></option>
                </select>
            </td>
        </tr>
    </table>
</div>