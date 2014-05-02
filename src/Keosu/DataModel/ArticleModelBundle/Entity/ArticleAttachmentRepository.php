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

namespace Keosu\DataModel\ArticleModelBundle\Entity;
use Doctrine\ORM\EntityRepository;

/**
 * ArticleAttachmentRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ArticleAttachmentRepository extends EntityRepository {

	public function getAttachmentByReader($idext, $readerId) {
		$attachment = $this->_em
				->createQuery(
						'SELECT a FROM Keosu\DataModel\ArticleModelBundle\Entity\ArticleAttachment a WHERE a.idext='
								. $idext . 'AND a.reader=' . $readerId)
				->getResult();
		if (count($attachment) > 1) {
			//TODO ERROR DUPLICATE ARTICLE
		} else if (count($attachment) == 0) {
			return null;
		} else {
			return $attachment[0];
		}
	}
}