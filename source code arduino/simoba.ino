#include <EEPROM.h> 
#include <Wire.h>
#include <ESP8266HTTPClient.h>
#include <ESP8266WiFi.h>
#include <SPI.h>
int TRIG = 15;
int ECHO = 13;
int buzzer = 4;
#define SENSOR  D3
long currentMillis = 0;
long previousMillis = 0;
int interval = 1000;
//boolean ledState = LOW;
float calibrationFactor = 4.5;
volatile byte pulseCount;
byte pulse1Sec = 0;
float flowRate;
unsigned int flowMilliLitres;
unsigned long totalMilliLitres;

int jarak = 0;

const char* ssid        = "sandi";
const char* password    = "banjir16";

const char* host = "192.168.99.180"; //

void  pulseCounter()
{
  pulseCount++;
}

void setup() {
  
  Serial.begin(9600);
  pinMode(TRIG, OUTPUT);
  pinMode(ECHO, INPUT);
  pinMode(buzzer, OUTPUT);
  pinMode(SENSOR, INPUT_PULLUP);
  pinMode(LED_BUILTIN, OUTPUT);
  pulseCount = 0;
  flowRate = 0.0;
  flowMilliLitres = 0;
  totalMilliLitres = 0;
  previousMillis = 0;

  attachInterrupt(digitalPinToInterrupt(SENSOR), pulseCounter, FALLING);
  WiFi.hostname("NodeMCU");
  WiFi.begin(ssid, password);

  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
    digitalWrite(LED_BUILTIN, LOW);   // Turn the LED on (Note that LOW is the voltage level
                                    // but actually the LED is on; this is because 
                                    // it is active low on the ESP-01)
   delay(1000);                      // Wait for a second
   digitalWrite(LED_BUILTIN, HIGH);  // Turn the LED off by making the voltage HIGH
   delay(2000);                      // Wait for two seconds (to demonstrate the active low LED)
  }

  Serial.println("");
  Serial.println("WiFi connected");

}
void loop() {
  WiFiClient client;
  const int httpPort = 80;
  
   if (!client.connect(host, httpPort)) {
    Serial.println("connection failed");
   digitalWrite(LED_BUILTIN, LOW);   // Turn the LED on (Note that LOW is the voltage level
   delay(1000);                      // Wait for a second
   digitalWrite(LED_BUILTIN, HIGH);  // Turn the LED off by making the voltage HIGH
   delay(2000);                      // Wait for two seconds (to demonstrate the active low LED)
    return;
  }
  Serial.println("");
  Serial.println("WiFi connected");
  
  currentMillis = millis();
  if (currentMillis - previousMillis > interval) {
    pulse1Sec = pulseCount;
    pulseCount = 0;
    flowRate = ((1000.0 / (millis() - previousMillis)) * pulse1Sec) / calibrationFactor;
    previousMillis = millis();
    flowMilliLitres = (flowRate / 60) * 1000;
    totalMilliLitres += flowMilliLitres;
    // Print the flow rate for this second in litres / minute
    Serial.print("Flow rate: ");
    Serial.print(int(flowRate));  // Print the integer part of the variable
    Serial.print("L/min");
    Serial.print("\t");       // Print tab space
    // Print the cumulative total of litres flowed since starting
    Serial.print("Output Liquid Quantity: ");
    Serial.print(totalMilliLitres);
    Serial.print("mL / ");
    Serial.print(totalMilliLitres / 1000);
    Serial.println("L");
        
  digitalWrite(TRIG, HIGH);
  delayMicroseconds(10);
  digitalWrite(TRIG, LOW);

  long T = pulseIn(ECHO, HIGH);
  jarak = 0.0343 * (T / 2);
  
  Serial.println("Kirim Nilai sensor : ");
  Serial.println("Ketinggian Air : " + String(jarak));
  Serial.println("Debit Air : " + String(flowRate));
  
  if (jarak >= 20)
  {
    Serial.println("Normal");
    digitalWrite(buzzer, LOW);
  }else {
    digitalWrite(buzzer, LOW);
  }

  if (jarak >= 15 )
  {
    Serial.println("Siaga 1");
    digitalWrite(buzzer, HIGH);
    digitalWrite(buzzer, LOW);
    delay(500);
  }
  if (jarak == 10)
  {
    Serial.println("Siaga 2");
    digitalWrite(buzzer, HIGH);
    digitalWrite(buzzer, LOW);
    digitalWrite(buzzer, HIGH);
    digitalWrite(buzzer, LOW);
    delay(500);
  }
  if (jarak == 5)
  {
    Serial.println("Siaga 3");
    digitalWrite(buzzer, HIGH);
    digitalWrite(buzzer, LOW);
    digitalWrite(buzzer, HIGH);
    digitalWrite(buzzer, LOW);
    delay(500);
  }
  if (jarak < 5 )
  {
     Serial.println("Bahaya Banjir");
    digitalWrite(buzzer, HIGH);
    digitalWrite(buzzer, HIGH);
    delay(500);
  }

  String getData, Link;
  HTTPClient http;    //Declare object of class HTTPClient
  //GET Data
 
  Link = "http://" + String(host) + "/simoba/Databanjir/update/"+String(jarak)+"/"+String(flowRate);
  http.begin(Link);     //Specify request destination

  int httpCode = http.GET();            //Send the request
  String payload = http.getString();    //Get the response payload

  Serial.println(payload);    //Print request response payload
  http.end();  //Close connection

  //kirim ke web
  delay(5000);
  
  
  
  }
}
