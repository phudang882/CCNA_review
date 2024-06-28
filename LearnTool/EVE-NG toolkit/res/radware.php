<?php
# vim: syntax=php tabstop=4 softtabstop=0 noexpandtab laststatus=1 ruler

/**
 * html/templates/radware.php
 *
 * win template for UNetLab.
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
 * @author Haibin Qiao <haibin.qiao@gmail.com >
 * @copyright Haibin Qiao
 * @organization EmulatedLab(QQ Group:593920308)
 * @link http://www.EmulatedLab.com
 * @version 20170628
 */


$p['type'] = 'qemu';
$p['name'] = 'AlteonOS';
$p['cpulimit'] = 1;
$p['icon'] = 'Radware.png';
$p['cpu'] = 2;
$p['ram'] = 4096;
$p['ethernet'] = 8;
$p['console'] = 'telnet';
$p['qemu_arch'] = 'x86_64';
$p['qemu_nic'] = 'virtio-net-pci';
$p['qemu_options'] = '-machine type=pc-1.0,accel=kvm -cpu qemu64,+fsgsbase -vga std -usbdevice tablet -boot order=dc';
?>
