<?php

/**
 * This is the model class for table "trips".
 *
 * The followings are the available columns in table 'trips':
 * @property integer $id
 * @property integer $region_id
 * @property integer $equipage_id
 * @property string $start_date
 * @property string $assigned_date
 * @property integer $dispatcher_id
 * @property integer $is_full
 *
 * The followings are the available model relations:
 * @property RelationTripsRegions[] $relationTripsRegions
 * @property Dispatchers $dispatcher
 * @property Equipages $equipage
 */
class Trip extends CActiveRecord
{

    /**
     * This is invoked before the record is saved.
     * @return boolean whether the record should be saved.
     */
    protected function beforeSave()
    {
        if (parent::beforeSave()) {
            if ($this->isNewRecord) {
                $region = Region::model()->findByPk($_GET['region_id']);
                $this->region_id = $_GET['region_id'];
                $this->assigned_date = LogisticCore::calcDateToClientArrival(
                        $this->start_date, $region->duration
                );
            }
            return true;
        } else
            return false;
    }

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'trips';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('start_date, dispatcher_id', 'required'),
            array('region_id, equipage_id, dispatcher_id, is_full', 'length', 'max' => 21),
            array('start_date', 'date', 'format' => 'yyyy-MM-dd'),
            array('assigned_date', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, region_id, is_full, equipage_id, start_date, assigned_date, dispatcher_id', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'relationTripsRegions' => array(self::HAS_MANY, 'RelationTripsRegions', 'trip_id'),
            'dispatcher' => array(self::BELONGS_TO, 'Dispatchers', 'dispatcher_id'),
            'equipage' => array(self::BELONGS_TO, 'Equipages', 'equipage_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'region_id' => 'Region_id',
            'equipage_id' => 'Equipage_id',
            'start_date' => 'Start Date',
            'assigned_date' => 'Assigned Date',
            'dispatcher_id' => 'Dispatcher_id',
            'is_full' => 'is full?'
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
    public function search()
    {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id, true);
        $criteria->compare('region_id', $this->region_id, true);
        $criteria->compare('equipage_id', $this->equipage_id, true);
        $criteria->compare('start_date', $this->start_date, true);
        $criteria->compare('assigned_date', $this->assigned_date, true);
        $criteria->compare('dispatcher_id', $this->dispatcher_id, true);
        $criteria->compare('is_full', $this->is_full, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Trip the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}
