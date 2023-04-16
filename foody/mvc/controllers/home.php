<?php

class home extends controller
{

	public function product()
	{

		$this->view("masterlayout", ["page" => "home/blog",]);
	}

	public function detail()
	{
		$this->view("detail", []);
	}
	public function cart()
	{
		$this->view("cart", []);
	}
	public function account()
	{
		$this->view("account", []);
	}
	public function register()
	{
		$this->view("register", []);
	}


	public function search()
	{

		$this->search_model = $this->model('search_model');
		if (isset($_POST["action"])) {
			// hk tìm dc search name là gì
			// lỗi utf8 do Php 8.1 hk có, hạ xuống 7.4 đi là dc rồi mở lại đoạn code đó
			$search_name = $_POST["search_name"];
			$result = $this->search_model->search($search_name);
			$output = "";
			foreach ($result as $rows) {
				$output .= '
					 <li class="list-itemm" style="overflow: hidden;padding: 9px;border-bottom: #f6f6f6 1px solid;background-color: #fff;text-indent: 0;font-weight: 400;line-height: 16px;cursor: pointer; display: flex">
                        <div  class="search-img">
                           <img style="margin-top: 2px" src="' . $rows["img"] . '" style="width: 100%" alt="">
                        </div>
                       	<div style="font-size: 14px; margin-left: 15px" class="search-product">
                         <div class="name-product">
                          <a style="font-size: 14px; font-weight: 600"href="">' . $rows["name"] . '</a>
                             </div>
                             <div class="search-address">
                          <a style="font-size: 12.5px"href="">' . $rows["address"] . '</a>
                       </div>
                   </div>
             	 </li>';
			}
			echo $output;
		}
	}
}
