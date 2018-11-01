

class Button{
	int wdth,hght,posX,posY;
	String label, URL;
	PImage display;

  Button(int w, int h, int x, int y,String l, String u) {
    wdth = w;
    hght = h;
	posX = x;
	posY = y;
	label = l;
	URL = u;
	

  }

  void draw() 
  {

	
    stroke(255);
    if(over()){
		stroke(0);
	}
	rect(posX, posY, wdth, hght);
	fill(0);
	textSize(100);
	translate(0,0,50);
	text(label, posX+ wdth/4,posY+hght/2);
  }
}
