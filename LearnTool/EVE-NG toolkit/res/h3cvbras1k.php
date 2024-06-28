<?php
# vim: syntax=php tabstop=4 softtabstop=0 noexpandtab laststatus=1 ruler

/**
 * html/templates/h3cvmsgvbras1k.php
 *
 * H3C vBRAS1000 template for UNetLab.
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
 * @author Dalian-Lv <lvirus.hcie@gmail.com>
 * @author Maosen Sun <sunnymaosen@gmail.com,sun285529808@qq.com>
 * @author Haibin Qiao <haibin.qiao@gmail.com >
 * @copyright Dalian-Lv, Maosen Sun, Haibin Qiao
 * @organization EmulatedLab(QQ Group:593920308)
 * @link http://www.EmulatedLab.com
 * @version 20170628
 */
 

$p['type'] = 'qemu';
$p['name'] = 'H3CvBRAS1000'; 
$p['cpulimit'] = 1;
$p['icon'] = 'h3cvbras1k.png';
$p['cpu'] = 1;
$p['ram'] = 1024; 
$p['ethernet'] = 4; 
$p['console'] = 'telnet';
$p['qemu_arch'] = 'x86_64';
$p['qemu_options'] = '-machine type=pc-1.0,accel=kvm -nographic -rtc base=utc';
?>
