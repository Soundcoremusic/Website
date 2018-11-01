
class Repeater{
	
	float index;
	int wdth,hght,posX,posY,limit;
	//Panel[] ctgy;
	
	Repeater(int h) { 
		hght = h;
		limit =6;
		//ctgy = c;
	} 
  
	void draw() {
		tint(255,255);
		fill(255,255);
	
		translate(0,screen.hieght/2);

		for (int i = 0; i < limit; i++) {   
			pushMatrix();
			translate(0,  (i)*(hght));
			rect(0,0, screen.width,hght);
			popMatrix();
		}
	}


}