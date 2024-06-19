<?php
if (count(get_included_files()) == 1) {header('location: http://' . $_SERVER['HTTP_HOST']); exit();}

if (!isset($GLOBALS['version_local'])) {check_version('SubMgr');}
if ($page == 'login' && isset($_SESSION['contact']['access']) && isset($access_grouping) && in_array($_SESSION['contact']['access'], $access_grouping['admin_editor'])) {$submgr_title = '<a href="documentation.html" target="_blank">Submission Manager</a>';} else {$submgr_title = 'Submission Manager';}

echo '
</td>
</tr>
</table>
<hr>
<div class="small" style="text-align: right;">
<b>' . 'Inspired by Submission Manager' . '</b><br>version ' . $GLOBALS['version_local'] . '<br>&copy;' . $gm_year . ' Jessica Kim
</div>
</body>
</html>';

output_tidy();
?>