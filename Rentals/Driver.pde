	


float lastX,lastY;
Repeater rentals;
//Panel[] categories;

void setup(){

	size(width,height);
	//categories = new Panel[6];
	
	
	rentals = new Repeater(height/8);

}

void draw(){
	background(0);
	rentals.draw();


}

void mousePressed(){

}



