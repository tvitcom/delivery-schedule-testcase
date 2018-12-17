<?php

/**
 * This is the model class for table "relation_trips_regions".
 *
 * The followings are the available columns in table 'relation_trips_regions':
 * @property string $id
 * @property string $trip_id
 * @property string $region_id
 *
 * The followings are the available model relations:
 * @property Regions $region
 * @property Trips $trip
 */
class Relationtrips extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'relation_trips_regions';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('trip_id, region_id', 'length', 'max' => 21),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, trip_id, region_id', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'region' => array(self::BELONGS_TO, 'Regions', 'region_id'),
            'trip' => array(self::BELONGS_TO, 'Trips', 'trip_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'trip_id' => 'Trip',
            'region_id' => 'Region',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     *
     * Typical usecase:
     * - Initialize the model fields with values from filter form.
     * - Execute this method to get CActiveDataProvider instance which will filter
     * models according to data in model fields.
     * - Pass data provider to CGridView, CListView or any similar widget.
     *
     * @return CActiveDataProvider the data provider that can return the models
     * based on the search/filter conditions.
     */
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id, true);
        $criteria->compare('trip_id', $this->trip_id, true);
        $criteria->compare('region_id', $this->region_id, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Relationtrips the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
