import 'package:flutter/material.dart';

class ProfilePage extends StatelessWidget {
  const ProfilePage({super.key});

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      backgroundColor: const Color(0xffF4F4F6),
      appBar: AppBar(
        centerTitle: true,
        title: const Text(
          "Pertemuan 10",
          style: TextStyle(fontWeight: FontWeight.bold),
        ),
      ),
      body: Padding(
        padding: const EdgeInsets.all(16),
        child: Column(
          children: [

            const CircleAvatar(
              radius: 70,
              backgroundColor: Color.fromARGB(255, 33, 129, 79),
              child: Icon(
                Icons.person,
                size: 70,
                color: Colors.greenAccent,
              ),
            ),

            const SizedBox(height: 20),

            const Text(
              "Felita Salma Desmonda",
              textAlign: TextAlign.center,
              style: TextStyle(
                fontSize: 28,
                fontWeight: FontWeight.bold,
              ),
            ),

            const Text(
              "2311102216",
              style: TextStyle(
                color: Colors.grey,
                fontSize: 18,
              ),
            ),

            const SizedBox(height: 30),

            Row(
              children: [
                Expanded(child: _infoCard("6", "Semester")),
                const SizedBox(width: 10),
                Expanded(child: _infoCard("ABP", "Praktikum")),
                const SizedBox(width: 10),
                Expanded(child: _infoCard("10", "Project")),
              ],
            )
          ],
        ),
      ),
    );
  }

  Widget _infoCard(String value, String label) {
    return Container(
      padding: const EdgeInsets.all(20),
      decoration: BoxDecoration(
        color: Colors.white,
        borderRadius: BorderRadius.circular(20),
      ),
      child: Column(
        children: [
          Text(
            value,
            style: const TextStyle(
              fontSize: 30,
              fontWeight: FontWeight.bold,
              color: Colors.greenAccent,
            ),
          ),
          Text(label),
        ],
      ),
    );
  }
}