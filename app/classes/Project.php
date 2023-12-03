<?php

class Project {

	private $allowedImageSizes = [1920, 400];

	public $id = null;
	public $year;
	public $location;
	public $stage;
	public $description;
	public $status;

	function __construct($id) {
		if ($data = DB::row('* FROM projects WHERE id=?', [$id])) {
			$this->id = $id;
			$this->title = $data['title'];
			$this->year = $data['year'];
			$this->location = $data['location'];
			$this->stage = $data['stage'];
			$this->description = $data['description'];
			$this->status = $data['status'];
			$this->size = $data['size'];
		}
	}

	function __get($name) {
		switch ($name) {
			case 'url':
				return $this->url = function_exists('html_public_link') ? html_public_link('projects/work?id=' . $this->id) : html_link('projects/work?id=' . $this->id);
				break;
			case 'staticUrl':
				return $this->staticUrl = __PUBLIC_CLIENT_URL__ . '/projects/work?id=' . $this->id;
				break;
			case 'cover':
				return $this->cover = '/uploads/projects/' . $this->id . '/cover.jpg';
				break;
			case 'images':
				return $this->images = $this->generateImageList();
				break;
		}
	}

	// get image list
	private function generateImageList() {
		$images = [];

		$res = DB::select('id FROM project_images WHERE projectId=? ORDER BY sort ASC, id ASC', [$this->id]);

		while ($row = $res->fetch_assoc()) {
			$image = [];

			foreach ($this->allowedImageSizes as $imgSize) {
				$image[$imgSize] = '/uploads/projects/' . $this->id . '/' . $row['id'] . '-' . $imgSize . '.jpg';
			}

			$images[$row['id']] = $image;
		}

		return $images;
	}
}
