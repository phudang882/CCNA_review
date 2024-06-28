<?php
# vim: syntax=php tabstop=4 softtabstop=0 noexpandtab laststatus=1 ruler

/**
 * html/templates/hillstonesg6k.php
 *
 * Hillstone SG6000 template for EVE-NG.
 *
 * LICENSE:
 *
 * This file is part of EVE-NG (Emulated Virtual Environment-Next Gensration).
 *
 * EVE-NG is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * EVE-NG is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with EVE-NG.If not, see <http://www.gnu.org/licenses/>.
 *
 *
 *
 * @author Maosen Sun <sunnymaosen@gmail.com,sun285529808@qq.com>
 * @author Haibin Qiao <haibin.qiao@gmail.com >
 * @copyright Maosen Sun, Haibin Qiao
 * @organization EmulatedLab(QQ Group:593920308)
 * @link http://www.EmulatedLab.com
 * @version 20170628
 */

$p['type'] = 'qemu';
$p['name'] = 'HillStoneSG6000';
$p['cpulimit'] = 1;
$p['icon'] = 'hillstone.png';
$p['cpu'] = 1;
$p['ram'] = 1024;
$p['ethernet'] = 4;
$p['console'] = 'telnet';
$p['qemu_arch'] = 'x86_64';
$p['qemu_options'] = '-machine type=pc-1.0,accel=kvm -serial mon:stdio -nographic -display none -nodefconfig -rtc base=utc -boot order=d';
?>
