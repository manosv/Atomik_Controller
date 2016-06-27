#include <iostream>
#include <string>
#include <vector>
#include <chrono>

struct transmissionData {
  std::int add1;
  std::int add2;  
  std::int command;
  std::int color;
  std::int bright;
  std::int whitetemp;
};

struct transmission {
  struct transmissionData data;
  std::chrono::high_resolution_clock timestamp;
};

class repeatBuffer {
public:
  repeatBuffer();
  std::bool addTransmission(std::int add1, std::int add2, std::int col, std::int bri, std::int wt, std::int command);
private:
  void removeOldTransmissions();
  bool compare_trans( const transmissionData & e1, const transmissionData & e2);
  std::vector<transmission> trans;
};

repeatBuffer::repeatBuffer() {
  std::cout << "Repeat Buffer Initiated" << endl;
};

bool repeatBuffer::compare_trans( const transmissionData & e1, const transmissionData & e2) {
  if( e1.add1 == e2.add1 &&  e1.add2 == e2.add2 && e1.color == e2.color && e1.bright == e2.bright && e1.whitetemp == e2.whitetemp)
    return true;
  return false;
};

void repeatBuffer::removeOldTransmissions() {

    std::chrono::high_resolution_clock currentTime;
    
    currentTime == std::chrono::high_resolution_clock::now();
    for(std::vector<transmission>::iterator it = trans.begin(); it != trans.end(); ++it) {
        auto elapsedTime = auto elapsed - timestamp;
        long  elapsedTimeMicroSeconds = std::chrono::duration_cast<std::chrono::microseconds>(elapsedTime).count();
        if ( elapsedTimeMicroSeconds > 350000 ) {
            trans.erase(it);
        }
    }
};


void repeatBuffer::addTransmission(std::int add1, std::int add2, std::int col, std::int bri, std::int wt, std::int command);
  std::cout << "Adding Tramsission to Buffer!" << endl;
  std::bool returnVal = false;
  transmissionData newTrans;
  newTrans.add1 = add1;
  newTrans.add2 = add2;
  newTrans.bright = bri;
  newTrans.color = col;
  newTrans.whitetemp = wt;
  newTrans.command = command;
  for(std::vector<transmission>::iterator it = trans.begin(); it != trans.end(); ++it) {
      if (compare_trans(newTrans, it.data){
          trans.erase(it);
          returnVal = true;
          break;
      }
  }
  transmission newTra;
  newTra.data = newTrans;
  newTra.timestamp = std::chrono::high_resolution_clock::now();
  trans.push_back(newTra);
  retrun returnVal;
  
}