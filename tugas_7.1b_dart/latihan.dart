int fpb(int a, int b) {
  while (b != 0) {
    int sisa = a % b;
    a = b;
    b = sisa;
  }
  return a;
}

void main() {
  List<List<int>> data = [];

  List<int> baris1 = [];
  for (int i = 1; i <= 4; i++) {
    baris1.add(i * 6);
  }
  data.add(baris1);

  List<int> baris2 = [];
  int ganjil = 3;
  for (int i = 0; i < 5; i++) {
    baris2.add(ganjil);
    ganjil += 2;
  }
  data.add(baris2);

  List<int> baris3 = [];
  for (int i = 4; i <= 9; i++) {
    baris3.add(i * i * i);
  }
  data.add(baris3);

  List<int> baris4 = [];
  int angka = 3;
  for (int i = 0; i < 7; i++) {
    baris4.add(angka);
    angka += 7;
  }
  data.add(baris4);

  print("Isi List:");
  for (var baris in data) {
    print(baris.join(" "));
  }

  print("");

  int bil1 = 12;
  int bil2 = 8;

  print("Bilangan 1: $bil1");
  print("Bilangan 2: $bil2");
  print("FPB $bil1 dan $bil2 = ${fpb(bil1, bil2)}");
}