<?php

namespace Module\Site\Repositories\Criteria;
use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

class SiteCriteria implements CriteriaInterface {

	public function apply($model, RepositoryInterface $repository)
	{
		return $model;
	}
}