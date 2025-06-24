import 'package:flutter/material.dart';
import '../models/exercise.dart';

class ExerciseDetailPage extends StatelessWidget {
  final Exercise exercise;
  const ExerciseDetailPage({super.key, required this.exercise});

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(title: Text(exercise.name)),
      body: Padding(
        padding: const EdgeInsets.all(16.0),
        child: Column(
          crossAxisAlignment: CrossAxisAlignment.start,
          children: [
            Text("Naam: ${exercise.name}", style: Theme.of(context).textTheme.titleLarge),
            const SizedBox(height: 20),
            ElevatedButton(
              onPressed: () {
                // Doorgaans naar PerformanceForm toevoegen/updaten
              },
              child: const Text("Voeg prestatie toe"),
            ),
          ],
        ),
      ),
    );
  }
}

