
import 'package:flutter/material.dart';

void main() {
  runApp(const MyApp());
}

class MyApp extends StatelessWidget {
  const MyApp({super.key});

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      debugShowCheckedModeBanner: false,
      title: 'Layout Part 1',
      home: const MyHomePage(),
    );
  }
}

class MyHomePage extends StatelessWidget {
  const MyHomePage({super.key});

  Widget riwayatTes(String tanggal, String nilai) {
    return Padding(
      padding: const EdgeInsets.symmetric(vertical: 10),
      child: Row(
        mainAxisAlignment: MainAxisAlignment.center,
        children: [
          const Column(
            crossAxisAlignment: CrossAxisAlignment.start,
            children: [
              Text(
                "Tanggal tes:",
                style: TextStyle(
                  color: Colors.blue,
                  fontSize: 18,
                ),
              ),
              SizedBox(height: 5),
              Text(
                "Nilai:",
                style: TextStyle(
                  color: Colors.blue,
                  fontSize: 18,
                ),
              ),
            ],
          ),
          const SizedBox(width: 80),
          Column(
            crossAxisAlignment: CrossAxisAlignment.start,
            children: [
              Text(
                tanggal,
                style: const TextStyle(
                  color: Colors.blue,
                  fontSize: 18,
                ),
              ),
              const SizedBox(height: 5),
              Text(
                nilai,
                style: const TextStyle(
                  color: Colors.blue,
                  fontSize: 18,
                ),
              ),
            ],
          ),
        ],
      ),
    );
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: SingleChildScrollView(
        child: Padding(
          padding: const EdgeInsets.symmetric(
            horizontal: 25,
            vertical: 30,
          ),
          child: Column(
            children: [
              Container(
                padding: const EdgeInsets.symmetric(vertical: 16),
                child: Row(
                  mainAxisAlignment: MainAxisAlignment.spaceBetween,
                  children: [
                    const Column(
                      crossAxisAlignment: CrossAxisAlignment.start,
                      children: [
                        Text(
                          "Welcome",
                          style: TextStyle(
                            color: Color(0xFF7367F0),
                            fontSize: 28,
                            fontWeight: FontWeight.w700,
                          ),
                        ),
                        Text(
                          "2311102216 - Felita Salma Desmonda",
                          style: TextStyle(
                            fontSize: 14,
                            fontWeight: FontWeight.w500,
                            color: Color(0xFF4B4B4B),
                          ),
                        ),
                      ],
                    ),
                    CircleAvatar(
                      radius: 25,
                      backgroundColor: Color(0xFFE6E0FF),
                    ),
                  ],
                ),
              ),

              Container(
                margin: const EdgeInsets.symmetric(
                  horizontal: 10,
                  vertical: 35,
                ),
                decoration: BoxDecoration(
                  gradient: const LinearGradient(
                    colors: [
                      Color(0xFF4839EB),
                      Color(0xFF7367F0),
                    ],
                  ),
                  borderRadius: BorderRadius.circular(12),
                ),
                child: Column(
                  children: [
                    const SizedBox(height: 25),

                    const Text(
                      "Status tes TOEFL Anda:",
                      style: TextStyle(
                        color: Colors.white,
                        fontSize: 16,
                      ),
                    ),

                    const SizedBox(height: 10),

                    const Text(
                      "LULUS",
                      style: TextStyle(
                        color: Colors.white,
                        fontSize: 30,
                        fontWeight: FontWeight.bold,
                      ),
                    ),

                    const SizedBox(height: 25),

                    Padding(
                      padding: const EdgeInsets.symmetric(horizontal: 15),
                      child: Row(
                        mainAxisAlignment:
                            MainAxisAlignment.spaceBetween,
                        children: const [
                          Column(
                            children: [
                              Text(
                                "Listening",
                                style: TextStyle(
                                  color: Colors.white,
                                  fontSize: 18,
                                ),
                              ),
                              SizedBox(height: 5),
                              Text(
                                "80",
                                style: TextStyle(
                                  color: Colors.white,
                                  fontSize: 18,
                                ),
                              ),
                            ],
                          ),

                          Column(
                            children: [
                              Text(
                                "Structure",
                                style: TextStyle(
                                  color: Colors.white,
                                  fontSize: 18,
                                ),
                              ),
                              SizedBox(height: 5),
                              Text(
                                "80",
                                style: TextStyle(
                                  color: Colors.white,
                                  fontSize: 18,
                                ),
                              ),
                            ],
                          ),

                          Column(
                            children: [
                              Text(
                                "Reading",
                                style: TextStyle(
                                  color: Colors.white,
                                  fontSize: 18,
                                ),
                              ),
                              SizedBox(height: 5),
                              Text(
                                "90",
                                style: TextStyle(
                                  color: Colors.white,
                                  fontSize: 18,
                                ),
                              ),
                            ],
                          ),
                        ],
                      ),
                    ),

                    const SizedBox(height: 25),
                  ],
                ),
              ),

              const Text(
                "Riwayat Tes",
                style: TextStyle(
                  fontSize: 28,
                  fontWeight: FontWeight.bold,
                ),
              ),

              const SizedBox(height: 15),

              riwayatTes("02/3/2022", "150"),
              riwayatTes("01/02/2022", "140"),
              riwayatTes("12/01/2022", "170"),
              riwayatTes("11/12/2021", "110"),
              riwayatTes("10/11/2021", "180"),
            ],
          ),
        ),
      ),
    );
  }
}
