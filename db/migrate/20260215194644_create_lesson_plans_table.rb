class CreateLessonPlansTable < ActiveRecord::Migration[6.0]
  def change
    create_table :lesson_plans do |t|
      t.string :title, null: false
      t.text :description
      t.timestamps
    end
  end
end