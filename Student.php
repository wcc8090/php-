
<?php
 
class Student
{
    private $id;
    private $name;
    private $ccode;
    private $cname;
    private $instructor;
	private $taname;
	private $taemail;
	private $taphone;
	private $A;
	private $B;
	private $C;
	private $score;
	private $D;
	private $E;
	private $level;
	private $com;
 
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
 
    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
 
    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }
 
    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
 
    /**
     * @return mixed
     */
    public function getCCode()
    {
        return $this->ccode;
    }
 
    /**
     * @param mixed $ccode
     */
    public function setCCode($ccode)
    {
        $this->ccode = $ccode;
    }
 
    /**
     * @return mixed
     */
    public function getcname()
    {
        return $this->cname;
    }
 
    /**
     * @param mixed $cname
     */
    public function setcname($cname)
    {
        $this->cname = $cname;
    }
	
	/**
	 * @return mixed
	 */
	public function getinstructor()
	{
	    return $this->instructor;
	}
	 
	/**
	 * @param mixed $instructor
	 */
	public function setinstructor($instructor)
	{
	    $this->instructor = $instructor;
	}
	 /**
	  * @return mixed
	  */
	 public function gettaname()
	 {
	     return $this->taname;
	 }
	  
	 /**
	  * @param mixed $taname
	  */
	 public function settaname($taname)
	 {
	     $this->taname = $taname;
	 }
	 
	 /**
	  * @return mixed
	  */
	 public function gettaemail()
	 {
	     return $this->taemail;
	 }
	  
	 /**
	  * @param mixed $taemail
	  */
	 public function settaemail($taemail)
	 {
	     $this->taemail = $taemail;
	 }
 
    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->taphone;
    }
 
    /**
     * @param mixed $taphone
     */
    public function setTelephone($taphone)
    {
        $this->taphone = $taphone;
    }
	
	/**
	 * @return mixed
	 */
	public function getA()
	{
		
	    return $this->A;
	}
	 
	/**
	 * @param mixed $A
	 */
	public function setA($A)
	{
	    $this->A = $A;
	}
	 
	 /**
	  * @return mixed
	  */
	 public function getB()
	 {
	     return $this->B;
	 }
	  
	 /**
	  * @param mixed $B
	  */
	 public function setB($B)
	 {
	     $this->B = $B;
	 }
	  
	  /**
	   * @return mixed
	   */
	  public function getC()
	  {
	      return $this->C;
	  }
	   
	  /**
	   * @param mixed $C
	   */
	  public function setC($C)
	  {
	      $this->C = $C;
	  }
	   
	   /**
	    * @return mixed
	    */
	   public function getscore()
	   {
	       return $this->score;
	   }
	    
	   /**
	    * @param mixed $score
	    */
	   public function setscore($score)
	   {
	       $this->score = $score;
	   }
	    
		/**
		 * @return mixed
		 */
		public function getD()
		{
		    return $this->D;
		}
		 
		/**
		 * @param mixed $D
		 */
		public function setD($D)
		{
		    $this->D = $D;
		}
		 
		 /**
		  * @return mixed
		  */
		 public function getE()
		 {
		     return $this->E;
		 }
		  
		 /**
		  * @param mixed $E
		  */
		 public function setE($E)
		 {
		     $this->E = $E;
		 }
		  
		  /**
		   * @return mixed
		   */
		  public function getlevel()
		  {
		      return $this->level;
		  }
		   
		  /**
		   * @param mixed $level
		   */
		  public function setlevel($level)
		  {
		      $this->level = $level;
		  }
		   
		   /**
		    * @return mixed
		    */
		   public function getcom()
		   {
		       return $this->com;
		   }
		    
		   /**
		    * @param mixed $com
		    */
		   public function setcom($com)
		   {
		       $this->com = $com;
		   }
		    
 
    
}
?>