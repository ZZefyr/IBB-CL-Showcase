<?php

namespace App\Presenters;


class FormatsPresenter extends BasePresenter
{
	protected $formatTypeId;
	protected $formatName;
	public function renderShow($formatTypeId)
	{
		$this->template->formatGroupName = $this->database
		->table('formatstype')
		->select('name, en_name')
		->where('id=?',$formatTypeId)->fetch();

		$this->template->formats = $this->database
		->table('formats')
		->where('typeId=?',$formatTypeId);		
	}

	public function renderDetail($formatName, $formatTypeId)
	{
		$this->template->formatGroupId = $formatTypeId;
		$this->template->formatGroupName = $this->database
		->table('formatstype')
		->select('name, en_name')
		->where('id=?',$formatTypeId)->fetch();

		$this->template->formatDetail = $this->database
		->table('formatDetail')
		->where('name=?',$formatName)->fetch();
	}
}
