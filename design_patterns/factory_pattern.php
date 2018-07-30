<?php
/**
 * @Author: 孤雁幽幽
 * @Date:   2018-07-28 15:12:16
 * @Last Modified by:   孤雁幽幽
 * @Last Modified time: 2018-07-28 15:17:52
 */
class Automobile {
	private $vehicleMake;
	private $vehicleModel;

	public function __construct($make, $model) {
		$this->vehicleMake = $make;
		$this->vehicleModel = $model;
	}

	public function getMakeAndModel() {
		return $this->vehicleMake . ' ' . $this->vehicleModel;
	}
}

class AutomobileFactory {
	public static function create($make, $model) {
		return new Automobile($make, $model);
	}
}

// 用工厂的 create 方法创建 Automobile 对象
$veyron = AutomobileFactory::create('Bugatti', 'Veyron');

print_r($veyron->getMakeAndModel()); // outputs "Bugatti Veyron"

/**
 * 工厂是用来创建对象的工厂
 */