<?php
/************************************************************************
 Keosu is an open source CMS for mobile app
Copyright (C) 2014  Vincent Le Borgne, Pockeit

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU Affero General Public License as
published by the Free Software Foundation, either version 3 of the
License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU Affero General Public License for more details.

You should have received a copy of the GNU Affero General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
************************************************************************/

namespace Keosu\CoreBundle;

/**
 * Contains all events thrown in the Keosu framework
 */
final class KeosuEvents
{

	const GADGET_ADD = 'keosu.gadget.add.';
	
	const GADGET_EDIT = 'keosu.gadget.edit.';
	
	const GADGET_DELETE = 'keosu.gadget.delete.';
	
	/**
	 * The GADGET_CONF_BUILD[Name of the gadget] event occurs when the form config is created
	 *
	 * This event allows to modify the config field
	 * The event listener methd receives a FOS\UserBundle\Event\GadgetFormBuilderEvent instance
	 */
	const GADGET_CONF_BUILD = 'keosu.gadget.conf.build.';
	
	const GADGET_CONF_SAV = 'keosu.gadget.conf.sav.';
	
	const GADGET_CONF_VIEW = 'keosu.gadget.conf.view.';
}
